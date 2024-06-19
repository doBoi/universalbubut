<x-layouts.layout>
    <h3 class="text-3xl text-center mt-24 -mb-24">Contact Us</h3>
    <div class="flex md:flex-row flex-col-reverse h-screen justify-center ">
        <form action="https://api.whatsapp.com/send/" class="self-center p-2 min-w-28" method="GET" target="_blank">
            <input type="text" id="phone" name="phone" value="6285810047212" required hidden><br>
            <button type="submit" class="w-full btn btn-success -mt-16">
                <img src={{ asset(('images/Whatsapp.svg')) }} class="max-w-6" alt="WA">
                Whatsapp
            </button>
        </form>

        <a href="https://maps.app.goo.gl/tptkFVC9jSexRjGh9" target="_blank"
            class="self-center p-2 min-w-24 btn btn-primary mt-2">
            <img src={{ asset(('images/Maps.svg')) }} class="max-w-6" alt="Maps">
            Maps
        </a>
    </div>
</x-layouts.layout>
