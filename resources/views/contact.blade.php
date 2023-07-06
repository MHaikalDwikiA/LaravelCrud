<x-app-layout title="ContactPage">

    <h1>ContactPage</h1>

    <form action="/contact" method="post">

        @csrf

        <button type="submit">Send</button>

    </form>

</x-app-layout>
