<?php

namespace EskayAmadeus\BookingsPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  use HasFactory;

  // Disable Laravel's mass assignment protection
  protected $guarded = [];

  // The properties that are mass assignable
  protected $fillable = ['booking_date', 'booking_time', 'comments'];
}