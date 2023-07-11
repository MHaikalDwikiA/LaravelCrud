<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome To My Site</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sapiente temporibus eius blanditiis tenetur alias optio harum quidem, accusamus quos corporis aut praesentium eaque perferendis distinctio facere. Dicta, iste veniam.</p>
                        <p>Blanditiis quam molestiae est quo nostrum saepe id minus a ipsam doloremque, commodi atque nam libero. Quam voluptatem repellat sit cupiditate ab pariatur ea magni assumenda, ullam obcaecati tempora consequuntur?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
