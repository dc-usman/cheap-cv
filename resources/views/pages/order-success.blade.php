@extends('layouts.web')

@section('title', 'Order Success')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="container mx-auto">

        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                            <polyline
                                style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                points="
                        38,15 22,33 12,25 " />
                        </svg>
                    </div>
                    <div>
                        <p class="text-center font-bold">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="m-4 grid lg:grid-cols-6">
            <div class="lg:col-start-2 lg:col-span-4 bg-primary py-2 px-5 rounded-t-lg ">
                <p class="text-xl text-white text-center">Thank you for choosing Us</p>
            </div>
            <div class="lg:col-start-2 lg:col-span-4 bg-white shadow-md rounded-b-lg p-5 border border-gray-300 overflow-x-auto">
                <table class="min-w-full text-center">
                    <thead class="border-b">
                        <tr class="text-primary">
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Order ID
                            </th>
                            {{-- <th scope="col" class="text-sm font-medium px-6 py-4">
                                Subject
                            </th> --}}
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Deadline
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Place at
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Status
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Charges
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        <tr class="bg-white border-b">
                            <td>{{ '#' . $order->id ?? '-' }}</td>
                            {{-- <td>{{ $order->content_type ?? '-' }}</td> --}}
                            <td>{{ $order->deadline->name ?? '-' }}</td>
                            <td>{{ showDate($order->created_at) ?? '-' }}</td>
                            <td>
                                @if ($order->is_complete)
                                    {{ 'Completed' }}
                                @else
                                    {{ 'Incomplete' }}
                                @endif
                            </td>
                            <td>{{ addCurrency($order->total_price) ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mt-5 text-primary">
                    <h3 class="">You'll receive an order verification Whatsapp text from our Team.</h3>
                </div>
            </div>
        </div>

    </section>

@endsection
