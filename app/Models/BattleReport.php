<?php

namespace OGame\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $planet_galaxy
 * @property int $planet_system
 * @property int $planet_position
 * @property int $planet_user_id
 * @property array|null $general
 * @property array|null $attacker
 * @property array|null $defender
 * @property array|null $rounds
 * @property array|null $loot
 * @property array|null $debris
 * @property array|null $repaired_defenses
 * @property array|null $wreckage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \OGame\Models\User|null $planetUserId
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereAttacker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereDebris($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereDefender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereGeneral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereLoot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport wherePlanetGalaxy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport wherePlanetPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport wherePlanetSystem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport wherePlanetUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereRepairedDefenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereRounds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BattleReport whereWreckage($value)
 * @mixin \Eloquent
 */
class BattleReport extends Model
{
    protected $casts = [
        'general' => 'array',
        'attacker' => 'array',
        'defender' => 'array',
        'rounds' => 'array',
        'loot' => 'array',
        'debris' => 'array',
        'repaired_defenses' => 'array',
        'wreckage' => 'array',
    ];

    /**
     * Get the player that owns the planet that this battle report is about.
     */
    public function planetUserId(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
