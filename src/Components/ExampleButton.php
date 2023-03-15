<?php

namespace Jeffreyvr\DropBlockEditor\Components;

use Livewire\Component;

class ExampleButton extends Component
{
    public $editor;

    protected $listeners = [
        'editorIsUpdated' => 'editorIsUpdated',
    ];

    public function editorIsUpdated($newEditor)
    {
        $this->editor = $newEditor;
    }

    public function save()
    {
        // Example of getting a json string of the active blocks.
        $activeBlocks = collect($this->editor['activeBlocks'])
            ->toJson();

        dump($activeBlocks);
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button wire:click="save" class="bg-blue-200 text-blue-900 rounded px-3 py-1 text-sm">Save</button>
            </div>
        blade;
    }
}
