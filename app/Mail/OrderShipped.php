<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $departurePoint;
    protected $departureTime;
    protected $destination;
    protected $arrivalTime;
    protected $travelTime;
    protected $busRegNumber;
    protected $ticketPrice;
    protected $place;
    protected $userName;

    /**
     * @param $departurePoint
     * @param $departureTime
     * @param $destination
     * @param $arrivalTime
     * @param $travelTime
     * @param $busRegNumber
     * @param $ticketPrice
     * @param $place
     * @param $userName
     */
    public function __construct($departurePoint, $departureTime, $destination, $arrivalTime, $travelTime, $busRegNumber, $ticketPrice, $place, $userName)
    {
        $this->departurePoint = $departurePoint;
        $this->departureTime = $departureTime;
        $this->destination = $destination;
        $this->arrivalTime = $arrivalTime;
        $this->travelTime = $travelTime;
        $this->busRegNumber = $busRegNumber;
        $this->ticketPrice = $ticketPrice;
        $this->place = $place;
        $this->userName = $userName;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped', [
            'userName'=>$this->userName,
            'departurePoint'=>$this->departurePoint,
            'departureTime'=>$this->departureTime,
            'destination'=>$this->destination,
            'arrivalTime'=>$this->arrivalTime,
            'travelTime'=>$this->travelTime,
            'busRegNum'=>$this->busRegNumber,
            'ticketPrice'=>$this->ticketPrice,
            'place' => $this->place,
        ]);
    }
}
