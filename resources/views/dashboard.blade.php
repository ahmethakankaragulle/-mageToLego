<x-app-layout>
    <style>
        .content {
            display: flex;
            flex-direction: row;
            color: black;
            justify-content: space-between;
        }

        .orders {
            width: 40%;
        }

        .messages {
            width: 40%;
        }
    </style>
    <x-slot name="header">Dashboard</x-slot>

    <div class="content">
        <div class="orders">
            <h3 class="display-4" style="margin-bottom: 2rem;">Siparişler</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">userID</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Status</th>
                        <th scope="col">Onayla</th>
                        <th scope="col">İptal Et</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->status }}</td>
                        <td><a href="{{ route('siparis.durum', [$order->id, 2]) }}">Onayla</a></td>
                        <td><a href="{{ route('siparis.durum', [$order->id, 3]) }}">İptal Et</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="messages">
            <h3 class="display-4" style="margin-bottom: 2rem;">Mesajlar</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">İsim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mesaj</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ahmet</td>
                        <td>ahmet@mail.com</td>
                        <td>Merhaba</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>