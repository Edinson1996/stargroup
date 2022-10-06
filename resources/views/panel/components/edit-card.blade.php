<div class="row mt-4">
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>
                            {{ $title }}
                        </h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form wire:submit.prevent="save">
                    {{ $form }}
                    <button class="btn btn-dark" type="submit">
                        Guardar
                    </button>
                </form>
                <div class="row">
                    {{ $preview }}
                </div>
            </div>
        </div>
    </div>
</div>