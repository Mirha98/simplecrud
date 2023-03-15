
  
<!-- Modal -->
<div class="modal fade" id="store_team_Modal" tabindex="-1" aria-labelledby="store_team_ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="store_team_ModalLabel">Store Racer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_store_racer">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Racer's Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="racer_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Team's Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="team_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="country_name">
                    </div>
                    <div class="modal-footer d-flex justify-content-end my-0">
                        <button class="btn btn-success btn-sm my-0" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>