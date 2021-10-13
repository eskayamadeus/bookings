<?php

namespace EskayAmadeus\BookingsPackage\Http\Controllers;

use Illuminate\Http\Request;
use EskayAmadeus\BookingsPackage\Models\Booking;

class BookingsController extends Controller
{
    /**
     * Return a collection of bookings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $booking = new Booking();
        $booking->companyId = $request->companyId;
        $booking->days = $request->days;
        $booking->start_days = $request->start_days;
        $booking->end_days = $request->end_days;
        $booking->save();
    }

    /**
     * Return a single Booking record
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve a model by its primary key...
        $booking = Booking::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Rechedule booking date
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reschedule($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Cancel a booking but not delete it.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel ($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
