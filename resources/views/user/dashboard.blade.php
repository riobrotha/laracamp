@extends('layouts.app')


@section('content')
<section class="dashboard my-5">
  <div class="container">
    <div class="row text-left">
      <div class=" col-lg-12 col-12 header-wrap mt-4">
        <p class="story">
          DASHBOARD
        </p>
        <h2 class="primary-header ">
          My Bootcamps
        </h2>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-lg-12">

        <table class="table">
          <tbody>
            @forelse ($checkouts as $checkout)
            <tr class="align-middle">
              <td width="18%">
                <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
              </td>
              <td>
                <p class="mb-2">
                  <strong>{{ $checkout->camp->title; }}</strong>
                </p>
                <p>
                  {{ date_format(new DateTime($checkout->created_at), 'F d, Y') }}
                </p>
              </td>
              <td>
                <strong>${{ number_format($checkout->camp->price,0); }}</strong>
              </td>
              <td>
                @if ($checkout->is_paid)
                <strong class="text-success">Payment Success</strong>
                @else
                <strong class="text-secondary">Waiting for Payment</strong>

                @endif
              </td>
              <td>
                <a href="https://wa.me/6281398943600?text=Hi, saya ingin bertanya tentang bootcamp {{ $checkout->camp->title }}"
                  target="_blank" class="btn btn-primary">
                  Contact Support
                </a>
              </td>
            </tr>
            @empty

            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection