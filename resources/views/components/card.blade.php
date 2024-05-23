@php
$titles = [
'The Dawn of AI',
'Exploring the Universe',
'Advancements in Technology',
'The Future of Space Travel',
'Innovations in Healthcare',
'Breakthroughs in Renewable Energy',
'The Mysteries of Quantum Physics',
'Revolutionizing Education',
'The Impact of Climate Change',
'Understanding Human Psychology'
];

$project = [
'Hasil bubutan yang presisi dan berkualitas tinggi.',
'Dapat menghasilkan komponen-komponen mesin dengan toleransi yang sangat ketat.',
'Menghasilkan permukaan yang halus dan bebas dari cacat.',
'Dapat membuat berbagai bentuk dan ukuran sesuai dengan spesifikasi.',
'Memproduksi komponen-komponen dengan keakuratan yang tinggi.',
'Menghasilkan komponen-komponen dengan keawetan dan ketahanan yang baik.',
'Dapat menghasilkan prototipe dengan cepat dan akurat.',
'Memberikan solusi yang efisien dan ekonomis dalam pembuatan komponen-komponen mesin.',
'Menghasilkan hasil bubutan yang sesuai dengan standar kualitas internasional.',
'Dapat menghasilkan volume produksi yang besar dengan konsistensi yang tinggi.'
];

$randomTitle = $titles[array_rand($titles)];
$randomProject = $project[array_rand($project)];
@endphp


{{-- Start Card --}}
<div class="mt-24 mb-10 grid justify-items-center grid-cols-1 sm:grid-flow-col-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

    @for ($i = 1; $i <= 13; $i++) <div class="card w-64 border bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://source.unsplash.com/random/400x400?lathe" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">{{ $titles[array_rand($titles)] }}!</h2>
            <p>{{ $project[array_rand($project)] }}</p>
            <div class="card-actions">
                <button class="btn btn-primary">Now</button>
            </div>
        </div>
</div>
@endfor







</div>
{{-- End Card --}}
