<?php

namespace App\Policies;

use App\Models\User;
use App\Models\penyakitLp;
use Illuminate\Auth\Access\Response;

class PenyakitLpPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, penyakitLp $penyakitLp): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, penyakitLp $penyakitLp): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, penyakitLp $penyakitLp): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, penyakitLp $penyakitLp): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, penyakitLp $penyakitLp): bool
    {
        //
    }
}
