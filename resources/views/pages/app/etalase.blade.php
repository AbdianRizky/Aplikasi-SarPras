<x-app-layout>
    {{-- <x-app.modal/> --}}
    <x-app.navbar/>

    <main>
        <section class="search__wrapper">
            <div class="search__mobile">
                <x-app.search/>
            </div>
        </section>
        {{-- <section class="sidebar">
            <x-app.sidebar/>
        </section>
        <section class="content">
            @for($i = 0; $i < 20; $i++)
            <x-app.content />
            @endfor
        </section> --}}
    </main>
</x-app-layout>
