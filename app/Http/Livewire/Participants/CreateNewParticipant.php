<?php

namespace App\Http\Livewire\Participants;

use Livewire\Component;

class
CreateNewParticipant extends Component
{
    public $showParticipantCreationModal = false;

    public function showParticipantCreationModal(): void
    {
        $this->resetErrorBag();

        $this->showParticipantCreationModal = true;
    }

    public function render()
    {
        return view('livewire.participant-creator');
    }
}
