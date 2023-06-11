@extends('layouts.Layout')
@section('Content')

{{-- Checkout --}}
<section>
    <div class="container w-3/4 mx-auto mt-20">
        <div class="bg-white rounded-xl drop-shadow-xl shadow-xl w-[50%] mx-auto">
            <div class="">
                <div class="flex justify-between py-4 px-6">
                    <div class="w-[25%]"><img src="{{ asset('storage/img/'.$order->product_image) }}" alt=""></div>
                    <div class="text-slate-400 font-semibold mr-[100px]">{{ $order->product_name }}</div>
                    <div class="text-slate-900 font-bold">Rp. {{ $order->product_price }} /Hari</div>
                </div>
                <div class="mt-5 border-b-2"></div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Nama :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->name }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Email :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->email }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">No Telp :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->phone }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Alamat :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->address }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Waktu Sewa :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->qty }} Hari</div>
                </div>
                <div class="mt-5 border-b-2"></div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-bold text-slate-900">Total Harga :</div>
                    <div class="text-xl font-bold text-slate-900">Rp. {{ $order->total_price }}</div>
                </div>
                <div class="py-4 px-6">
                    <button id="pay-button" class="bg-teal-500 text-center text-white font-semibold w-full py-2 px-4 mt-4 rounded-md">Bayar</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          window.location.href= '/invoice/{{ $order->id }}'
          alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
</script>

@endsection
