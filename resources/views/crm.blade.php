    <div id="sales-crm" class="col-xs-12 col-sm-11 col-md-11 pull-right">
        <br/><br/><div class="bot-10"></div>
        <h1>Sales Performance</h1>
        <div class="col-xs-6 col-sm-2 col-md-2 pad-l0">
            <b class="small" for="review-type">Review for</b>
            <select class="form-control" id="review-type">
                <option selected="">Person</option>
                <option>Person type 1</option>
                <option>Person type 2</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2 pad-l0">
            <b class="small" for="review-sub-type">Select Person</b>
            <select class="form-control" id="review-sub-type" onchange="getSalesData('Quarterly')">
                <option selected="">Ashok BN</option>
                <option>Vineet</option>
                <option>Mayur</option>
            </select>
        </div>
        <div class="clearfix"></div>
        <div class="bot-15"></div>
        <div id="salesdata">
            @include('salesData')
        </div>
        <div id="fin-modal" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body nopad"></div>
                </div>
            </div>
        </div>