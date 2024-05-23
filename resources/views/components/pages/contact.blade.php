<x-layouts.layout>
    <h3 class="text-3xl text-center mt-24 -mb-24">Contact Us</h3>
    <div class="flex flex-col h-screen justify-center">
        <form action="https://api.whatsapp.com/send/" class="self-center" method="GET" target="_blank">
            <input type="text" id="phone" name="phone" value="6285810047212" required hidden><br>
            <button type="submit" class="w-full btn btn-success">WhatsApp</button>
        </form>
    </div>
</x-layouts.layout>
