<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PrayerTimes extends Component
{
    public $data;
    public function mount()
    {
           // Get the current year and month for the URL
           $year = date('Y');
           $month = date('m');
           $day = date('d');
           $time = date('H:i:s');
           $city = 'bogor';
           $url = "https://cdn.statically.io/gh/lakuapik/jadwalsholatorg/master/adzan/{$city}/{$year}/{$month}.json";
   
           // Fetch data from the API URL
           $response = Http::get($url);
           $apiData = $response->json();
           
        //    $currentDate = Carbon::now()->format('Y-m-d');
           $currentDate = $year . '-' . $month . '-' . $day;

           foreach ($apiData as $item)
           {
               if ($item['tanggal'] == $currentDate)
               {
                   $this->data = $item;
                   break;
               }
           }
    }
    public function getTimeDifference($prayerTime)
    {
        $currentTime = Carbon::now();
        $prayerDateTime = Carbon::createFromFormat('H:i', $prayerTime);

        $difference = $currentTime->diffInSeconds($prayerDateTime);

        return gmdate('H:i:s', $difference);
    }
    public function render()
    {
        return view('livewire.prayer-times');
    }
}
