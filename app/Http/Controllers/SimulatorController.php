<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\{MatchResult,Club};

class SimulatorController extends Controller
{
    /**
     * @param Club $clubs
     * @return View
     */
    public function index(Club $clubs, MatchResult $result): View
    {
        return view('simulator', [
            'clubs'   => $clubs->get(),
            'results' => $result->get()
        ]);
    }

    public function simulate(){
        $week = 1;
        $clubs =  Club::all();
        $combination = $this->makeFullCombination($clubs->pluck('id')->toArray());
        $combination = $this->separateCombination($combination);
        $combination = $this->getUnique($combination);

        foreach ($combination as $index =>$item){

            MatchResult::create([
                'play_week'       => $week,
                'team_won_id'     => $item[0],
                'team_lost_id'    => $item[1],
                'team_won_score'  => 3,
                'team_lost_score' => 2,
            ]);
        }

        return $combination;
    }

    protected function getUnique(array $list): array
    {
        $result = [];
        foreach ($list as $index => $normal) {
            usort($normal, function ($a, $b) {
                return ($a - $b);
            });
            $result[$index] = $normal;
        }
        return array_values(array_unique($result, SORT_REGULAR));
    }

    protected function findByArray(array $list, $inversion): array
    {
        foreach ($list as $item) {
            if ($item[0] == $inversion[0] && $item[1] == $inversion[1]) {
                unset($item);
            }
        }

        return $list;
    }

    protected function separateCombination(array $list): array
    {
        $result = [];

        foreach ($list as $item) {
            $result[] = array_slice($item, 0, 2);
        }

        return $result;
    }

    protected function makeFullCombination(array $idList, array $prepend = []): array
    {
        $input = array_values($idList);

        // permutation of 1 value is the same value
        if (count($input) === 1) {
            return [$input];
        }

        $result = [];
        for ($i = 0; $i < count($idList); $i++) {
            $copy  = $input;
            $value = array_splice($copy, $i, 1);
            foreach ($this->makeFullCombination($copy) as $permutation) {
                array_unshift($permutation, $value[0]);
                $result[] = $permutation;
            }
        }

        return $result;
    }
}
