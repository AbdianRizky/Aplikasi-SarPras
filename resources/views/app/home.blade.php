<x-app-layout>
    <x-app.modal/>

    <nav>
        <x-app.navbar/>
    </nav>

    <main>
        <section class="sidebar">
            <x-app.sidebar/>
        </section>
        <section class="content">
            @for($i = 0; $i < 20; $i++)
            <x-app.content />
            @endfor
        </section>
    </main>

</x-auth-layout>
