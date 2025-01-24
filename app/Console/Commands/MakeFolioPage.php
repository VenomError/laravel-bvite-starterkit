<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use function Laravel\Prompts\text;
class MakeFolioPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pages {name?} {route_name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buat file halaman dengan nama dan route name opsional';

    /**
     * Filesystem instance.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * Buat instance baru dari command.
     *
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        if(!$name)
        {
            $name = text(
                'view name or path' ,
                'input view name',
                required: true
            ) ;
        }

        // Gunakan $name sebagai default untuk $routeName jika tidak diberikan
        $routeName = $this->argument('route_name') ?? strtolower($name);

        $routeName = str_replace('/', '.', strtolower($name));
        $name = str_replace('.', '/', strtolower($name));

        $stubPath = base_path('stubs/folio-page.stub');
        if (!$this->files->exists($stubPath)) {
            $this->error("Stub file tidak ditemukan di: {$stubPath}");
            return Command::FAILURE;
        }

        $stubContent = $this->files->get($stubPath);

        $stubContent = str_replace(
            [
                '{{ name }}',
                '{{ route_name }}'
            ],
            [
                $name,
                $routeName
            ],
            $stubContent
        );

        $destinationPath = base_path("resources/views/pages/{$name}.blade.php");

        if ($this->files->exists($destinationPath)) {
            $this->error("File dengan nama '{$name}.blade.php' sudah ada di: {$destinationPath}");
            return Command::FAILURE;
        }

        $this->files->ensureDirectoryExists(dirname($destinationPath));
        $this->files->put($destinationPath, $stubContent);

        $this->info("File halaman berhasil dibuat: {$destinationPath}");
        return Command::SUCCESS;

    }
}
