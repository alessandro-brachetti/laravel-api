@extends('layouts.app')

@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <title>Sports</title>
@endsection

@section('content')
    <main id="root">
        <h1>Sports</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>With Ball</th>
            </tr>
            <tr v-for="sport in sports" :key="sport.id">
                <td><strong>@{{sport.name}}</strong></td>
                <td>@{{sport.description}}</td>
                <td>@{{sport.with_ball == '0' ? 'no' : 'yes'}}</td>
            </tr>
        </table>
    </main>
@endsection

@section('foot-script')
    <script src="{{ asset('js/sports.js') }}"></script>
@endsection