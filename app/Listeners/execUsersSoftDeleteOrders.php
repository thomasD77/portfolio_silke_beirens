<?php

namespace App\Listeners;

use App\Events\UsersSoftDeleteOrders;
use App\Models\Orderdetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class execUsersSoftDeleteOrders
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UsersSoftDeleteOrders $event)
    {
        //

        $userId = $event->user->id;
        $orders = $event->user->orders()->where('user_id', $userId);
        $orderID = $orders->pluck('id');

            $orderdetails = Orderdetail::where('order_id', $orderID)->get();
            foreach($orderdetails as $orderdetail){
                $orderdetail->delete();
            }


        $orders->delete();
    }
}
