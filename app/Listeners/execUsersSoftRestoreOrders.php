<?php

namespace App\Listeners;

use App\Events\UsersSoftRestoreOrders;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class execUsersSoftRestoreOrders
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
    public function handle(UsersSoftRestoreOrders $event)
    {
        //
        $userId = $event->user->id;
        $orders = Order::onlyTrashed()->get();
        $event->user->orders()->where('user_id', $userId)->restore();


        $orderID = $orders->pluck('id');
        $orderdetails = Orderdetail::onlyTrashed()->where('order_id', $orderID)->get();

            foreach($orderdetails as $orderdetail){
                $orderdetail->restore();
            }


    }
}
