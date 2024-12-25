@extends('layout.main')

@section('content')
    <div class="relative px-8 overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-white    ">
            <thead class="text-xs text-gray-900 uppercase ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Discount
                    </th>
                    <th scope="col" class=" py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <tr rowId="{{ $id }}" class=" bg-white border-b dark:bg-rose-700 dark:border-white">

                            <td scope="row" class="px-6 py-4">
                                <div class=""><img src="./assets/img/{{ $details['image'] }}" width="50px"
                                        alt=""></div>
                            </td>
                            <td class="px-6 py-4">
                                <a
                                    href="{{ $details['category'] === 'minuman' ? '/drink' : '/snack' }}">{{ $details['name'] }}</a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $details['category'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $details['price'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $details['discount'] }}
                            </td>
                            <td class="px-4 py-2">
                                <button
                                    class="text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out delete-product">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    @section('scripts')
        <script type="text/javascript">
            $(".delete-product").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Apakah Anda Yakin Ingin Menghapusnya?")) {
                    $.ajax({
                        url: '{{ route('delete.cart.product') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("rowId")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>
    @endsection
</div>



<div class="mb-5 bg-gray-100 py-4 px-6 flex justify-between items-center fixed bottom-0 left-0 right-0">
    <div class="text-lg text-black font-bold">
        {{-- Total: Rp {{ number_format($totalPrice, 0, ',', '.') }} --}}
    </div>
    <div class="right-0">
        <button class="bg-rose-700 hover:bg-rose-500 text-white font-bold py-2 px-4 rounded">
            <a href="{{ url('/') }}">Lanjut Belanja</a>
        </button>
    </div>
</div>
@endsection
