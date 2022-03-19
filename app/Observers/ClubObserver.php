<?php

namespace App\Observers;

use App\Models\Club;

class ClubObserver
{
    /**
     * Handle the Club "created" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function created(Club $club)
    {
        $club->update([
            'points' => $club->won * 3 + $club->lost * 1
        ]);
    }

    /**
     * Handle the Club "updated" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function updated(Club $club)
    {
        $club->update([
            'points' => $club->won * 3 + $club->lost * 1
        ]);
    }

    /**
     * Handle the Club "deleted" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function deleted(Club $club)
    {
        //
    }

    /**
     * Handle the Club "restored" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function restored(Club $club)
    {
        //
    }

    /**
     * Handle the Club "force deleted" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function forceDeleted(Club $club)
    {
        //
    }
}
