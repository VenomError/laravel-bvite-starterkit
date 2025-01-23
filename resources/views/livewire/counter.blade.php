<?php
 
use function Livewire\Volt\{state};
 
state(['count' => 0]);
 
$increment = fn () => $this->count++;
$flash = fn() => flash('clicked');
?>
 
<div>
    <button wire:click="flash" class="btn btn-sm btn-success" wire:loading.attr='disabled'>flash</button>
</div>