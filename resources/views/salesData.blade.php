        <div class="col-xs-12 col-sm-12 col-md-7 pad-l0">
            <b class="small">Select Timeline</b>
            <div class="clearfix"></div>
            <ul class="list-inline list-unstyled timeline nomar bordered in-bl rounded text-primary clear-back">
                <li title="Check stats on yearly basis" onclick="selectTimeline(this, 'Yearly');" <?=($data->timeline == "Yearly") ? 'class="active"' : '';?>>Yearly</li>
                <li title="Check stats on quarterly basis" onclick="selectTimeline(this, 'Quarterly');" <?=($data->timeline == "Quarterly") ? 'class="active"' : '';?>>Quarterly</li>
                <li title="Check stats on monthly basis" onclick="selectTimeline(this, 'Monthly');" <?=($data->timeline == "Monthly") ? 'class="active"' : '';?>>Monthly</li>
                <li title="Check stats on weekly basis" onclick="selectTimeline(this, 'Weekly');" <?=($data->timeline == "Weekly") ? 'class="active"' : '';?>>Weekly</li>
                <li title="Check stats on daily basis" onclick="selectTimeline(this, 'Daily');" <?=($data->timeline == "Daily") ? 'class="active"' : '';?>>Daily</li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 nopad">
            <div class="visible-sm visible-xs"><div class="bot-15"></div></div>
            <div class="col-xs-6 col-sm-4 col-md-4 pad-l0">
                <b class="small">Select Start Date</b>
                <div class="clearfix"></div>
                <input type="date" class="form-control" title="Select start date">
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 pad-l0">
                <b class="small">Select End Date</b>
                <div class="clearfix"></div>
                <input type="date" class="form-control" title="Select end date">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="bot-15"></div>
        <div class="row">
            <div class="section-wrap">
                <div class="in-bl pull-left">
                    <div class="bot-15"></div>
                    <ul class="list-inline list-unstyled nomar">
                        <li class="mar-r5"><span class="glyphicon glyphicon-stop fin-gold mar-r5"></span> <small>Gold</small></li>
                        <li class="mar-r5"><span class="glyphicon glyphicon-stop fin-platinum mar-r5"></span> <small>Platinum</small></li>
                        <li class="mar-r5"><span class="glyphicon glyphicon-stop fin-diamond mar-r5"></span> <small>Diamond</small></li>
                    </ul>
                </div>
                <div class="in-bl pull-right">
                    <b class="small">View by</b>
                    <div class="clearfix"></div>
                    <ul class="list-inline list-unstyled timeline nomar bordered in-bl rounded text-primary clear-back">
                        <li class="active">Graph</li>
                        <li>Table</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Total Clients</b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->totalClients }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Clients added <span class="text-<?=($data->newClientsAddedStat < 0) ? 'danger' : 'success';?> pull-right"><small class="hidden-sm glyphicon glyphicon-triangle-<?=($data->newClientsAddedStat < 0) ? 'bottom' : 'top';?>"></small> {{ abs($data->newClientsAddedStat) }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->newClientsAdded }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Clients Met <span class="text-<?=($data->newClientsMetStat < 0) ? 'danger' : 'success';?> pull-right"><small class="hidden-sm glyphicon glyphicon-triangle-<?=($data->newClientsMetStat < 0) ? 'bottom' : 'top';?>"></small> {{ abs($data->newClientsMetStat) }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->newClientsMet }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Promoters Met <span class="text-<?=($data->promotersMetStat < 0) ? 'danger' : 'success';?> pull-right"><small class="hidden-sm glyphicon glyphicon-triangle-<?=($data->promotersMetStat < 0) ? 'bottom' : 'top';?>"></small> {{ abs($data->promotersMetStat) }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->promotersMet }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>In-Person <span class="pull-right">{{ $data->inPersonStat }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->inPerson }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Phone Call <span class="pull-right">{{ $data->phoneCallStat }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->phoneCall }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Clients Met <span class="text-<?=($data->clientsMetStat < 0) ? 'danger' : 'success';?> pull-right"><small class="hidden-sm glyphicon glyphicon-triangle-<?=($data->clientsMetStat < 0) ? 'bottom' : 'top';?>"></small> {{ abs($data->clientsMetStat) }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->clientsMet }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>In-Person <span class="pull-right">{{ $data->inPersonStat }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->inPerson }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Phone Call <span class="pull-right">{{ $data->phoneCallStat }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->phoneCall }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Call Reports <span class="text-<?=($data->callReportsStat < 0) ? 'danger' : 'success';?> pull-right"><small class="hidden-sm glyphicon glyphicon-triangle-<?=($data->callReportsStat < 0) ? 'bottom' : 'top';?>"></small> {{ abs($data->callReportsStat) }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->callReports }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>In-Person <span class="pull-right">{{ $data->inPersonStat }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->inPerson }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-5-10"><b>Phone Call <span class="pull-right">{{ $data->phoneCallStat }}%</span></b></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 pad-15">
                        <img src="assets/images/donut.png" class="img-responsive">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 nopad">
                        <div class="bot-5"></div>
                        <h2>{{ $data->phoneCall }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="bot-15"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-0-10"><h4><b>Pending Tasks (10)</b></h4></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table nomar small">
                            <tr>
                                <th><input class="nomar" type="checkbox" onchange="selectPendingTasks(this)"></th>
                                <th class="llgrey">Task</th>
                                <th class="llgrey">Client</th>
                                <th class="llgrey">Status</th>
                                <th class="min-w70"></th>
                            </tr>
                            <?php foreach ($data->pending as $key => $p) {?>
                            <tr>
                                <td><input class="nomar task-checkbox" type="checkbox"></td>
                                <td>{{ $p->task }}</td>
                                <td class="text-primary">{{ $p->client }}</td>
                                <td class="text-<?php if($p->status == 'Closed') echo 'success'; else if($p->status == 'Pending') echo 'warning'; else if($p->status == 'Overdue') echo 'danger'; ?>">{{ $p->status }}</td>
                                <td class="text-primary">
                                    <small class="glyphicon glyphicon-ok-sign mar-r5 pointer" onclick="showMsg(this)" title="Click to see error alert"></small>
                                    <small class="glyphicon glyphicon-pencil mar-r5 pointer" onclick="showMsg(this)" title="Click to see error alert"></small>
                                    <small class="glyphicon glyphicon-trash pointer" onclick="showMsg(this)" title="Click to see error alert"></small>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <hr class="nomar">
                        <center class="text-primary pad-10 pointer small" onclick="getModal()" data-toggle="modal" data-target="#fin-modal" title="See complete list">See All</center>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-0-10"><h4><b>Source Projects (30)</b></h4></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table nomar small">
                            <tr>
                                <th class="llgrey">#</th>
                                <th class="llgrey">Project Name</th>
                                <th class="llgrey">Client</th>
                                <th class="llgrey text-center">Project Cost</th>
                            </tr>
                            <?php foreach ($data->source as $key => $s) {?>
                            <tr>
                                <td>{{ ($key + 1) }}</td>
                                <td class="text-primary">{{ $s->project }}</td>
                                <td class="text-primary">{{ $s->client }}</td>
                                <td class="text-center">{{ $s->cost }}</td>
                            </tr>
                            <?php } ?>
                        </table>
                        <hr class="nomar">
                        <center class="text-primary pad-10 pointer small" onclick="getModal()" data-toggle="modal" data-target="#fin-modal" title="See complete list">See All</center>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 section-wrap">
                <div class="nopad bordered rounded shad clear-back">
                    <div class="bordered-b pad-0-10"><h4><b>Meetup Summary</b></h4></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table nomar small">
                            <tr>
                                <th class="llgrey">#</th>
                                <th class="llgrey">Client</th>
                                <th class="llgrey text-center">In-Person</th>
                                <th class="llgrey text-center">Phone</th>
                            </tr>
                            <?php foreach ($data->meetup as $key => $m) {?>
                            <tr>
                                <td>{{ ($key + 1) }}</td>
                                <td class="text-primary">{{ $m->client }}</td>
                                <td class="text-center">{{ $m->inPerson }}</td>
                                <td class="text-center">{{ $m->cost }}</td>
                            </tr>
                            <?php } ?>
                        </table>
                        <hr class="nomar">
                        <center class="text-primary pad-10 pointer small" onclick="getModal()" data-toggle="modal" data-target="#fin-modal" title="See complete list">See All</center>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="section-wrap">
                <div class="bordered clear-back shad rounded">
                    <div class="bordered-b pad-0-10"><h4><b>Daily Activity</b></h4></div>
                    <div class="pad-15">
                        <div class="dropup">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">See activity
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header pad-15 pad-b0 pad-t0">12 SEP 2017 10:45 AM - 11:20AM</li>
                                <li class="pad-15 pad-b0 pad-b0">Promoter Call: <span class="text-primary">Emmanueal Developer</span></li>
                                <li class="pad-15 pad-b0 pad-b0">Client Name: <span class="text-primary">Gaurav Bhargav</span></li>
                                <li class="pad-15 pad-b0 pad-b0">Duration: 35 Mins</li>
                                <li class="pad-15 pad-b0 pad-b0">
                                    Meeting Summary:
                                    <ul class="small pad-5-10 pad-l30">
                                        <li>Share Holding %</li>
                                        <li>Project Approvals</li>
                                        <li>Update Arctitect Rendition</li>
                                        <li>Collateral requirements</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-6 pull-right xs-nopad">
                            <div class="visible-xs"><br/></div>
                            <div class="bordered rounded shad text-center">
                                <div class="bordered-b pad-0-10"><h4><b>Efficiency</b></h4></div>
                                <div class="bot-10"></div>
                                <ul class="list-inline list-unstyled timeline in-bl">
                                    <li class="w-auto">Today <span class="text-success">60%</span></li>
                                    <li class="w-auto">This Month <span class="text-success">70%</span></li>
                                    <li class="w-auto">This Week <span class="text-success">65%</span></li>
                                    <li class="w-auto">Total <span class="text-success">89%</span></li>
                                </ul>
                            </div>
                            <div class="bot-5"></div>
                            <div class="bordered rounded shad">
                                <table class="table borderless nomar">
                                    <tr>
                                        <td><span class="glyphicon glyphicon-earphone text-success mar-r5"></span> Client Phone Call</td>
                                        <td><span class="glyphicon glyphicon-earphone text-success mar-r5"></span> Client In-Person</td>
                                        <td><span class="glyphicon glyphicon-earphone text-success mar-r5"></span> In-Transit</td>
                                    </tr>
                                    <tr>
                                        <td><span class="glyphicon glyphicon-earphone text-success mar-r5"></span> Promoter Phone Call</td>
                                        <td><span class="glyphicon glyphicon-earphone text-success mar-r5"></span> Promoter In-Person</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="section-wrap">
                <div class="bordered clear-back shad rounded">
                    <div class="bordered-b pad-0-10"><h4><b>Sales Pipeline</b></h4></div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div id="chartContainer" class="full-h full-w"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 pipeline-section pull-right">
                        <div class="bot-15"></div><div class="bot-10"></div>
                        <div class="pad-15 pad-t0 pad-b0 bordered rounded shad">
                            <h4>Leads (1800)</h4>
                            <div class="row"><hr class="nomar"></div>
                            <table class="table nomar">
                                <tr>
                                    <th></th>
                                    <th class="llgrey">Client Name</th>
                                    <th class="llgrey">Status</th>
                                </tr>
                                <?php for($i = 0; $i < 6; $i++) {?>
                                <tr>
                                    <td><img src="assets/images/builder-logo2.png" width="50"></td>
                                    <td class="text-primary">Dhamanagi Developer</td>
                                    <td class="text-warning">Pending</td>
                                </tr>
                                <?php } ?>
                            </table>
                            <hr class="nomar">
                            <center class="text-primary pad-10 pointer small" onclick="getModal()" data-toggle="modal" data-target="#fin-modal">Showing 1 to 6 of 1800</center>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="section-wrap">
                <div class="bordered clear-back shad rounded">
                    <div class="bordered-b pad-0-10"><h4><b>Pipeline Clients</b></h4></div>
                    <div class="fin-scroll pipeline-section">
                        <?php for($i = 1; $i <= 10; $i++) {?>
                        <div class="clients-list-wrap back-grey rounded in-bl bordered">
                            <h4>Leads (1800)</h4>
                            <div class="clients-list fin-scroll">
                            <?php for($j = 0; $j < 8; $j++) {?>
                                <div class="clear-back rounded client-wrap bordered fin-scroll">
                                    <table>
                                        <tr>
                                            <td class="pad-15">
                                                <img src="assets/images/builder-logo.png" width="55" class="img-responsive client-logo">
                                            </td>
                                            <td class="pad-10">
                                                <span class="text-primary">MIMS Builders</span><br/>
                                                <small>Promoter Meeting: <span class="text-success">Yes</span></small><br/>
                                                <small>Status: <span class="text-warning">Pending</span></small>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <?php } ?>
                            </div>
                            <h5 class="text-center text-primary small pointer" onclick="getModal()" data-toggle="modal" data-target="#fin-modal">Showing 1 to 8 of 1800</h5>
                        </div>
                        <?php if($i %5 == 0) {?>
                        <div class="clearfix"></div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="section-wrap">
                <div class="bordered clear-back shad rounded">
                    <div class="bordered-b pad-0-10"><h4><b>Comparision</b></h4></div>
                </div>
                <div class="bordered clear-back shad rounded pad-15">
                    <div class="col-xs-12 col-sm-12 col-md-7 pad-l0">
                        <b class="small">Select Timeline</b>
                        <div class="clearfix"></div>
                        <ul class="list-inline list-unstyled timeline nomar bordered in-bl rounded text-primary clear-back">
                            <li title="Check stats on yearly basis" onclick="selectTimeline(this, 'Yearly');" <?=($data->timeline == "Yearly") ? 'class="active"' : '';?>>Yearly</li>
                            <li title="Check stats on quarterly basis" onclick="selectTimeline(this, 'Quarterly');" <?=($data->timeline == "Quarterly") ? 'class="active"' : '';?>>Quarterly</li>
                            <li title="Check stats on monthly basis" onclick="selectTimeline(this, 'Monthly');" <?=($data->timeline == "Monthly") ? 'class="active"' : '';?>>Monthly</li>
                            <li title="Check stats on weekly basis" onclick="selectTimeline(this, 'Weekly');" <?=($data->timeline == "Weekly") ? 'class="active"' : '';?>>Weekly</li>
                            <li title="Check stats on daily basis" onclick="selectTimeline(this, 'Daily');" <?=($data->timeline == "Daily") ? 'class="active"' : '';?>>Daily</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 nopad">
                        <div class="visible-sm visible-xs"><div class="bot-15"></div></div>
                        <div class="col-xs-6 col-sm-4 col-md-4 pad-l0">
                            <b class="small">Compare From</b>
                            <div class="clearfix"></div>
                            <select class="form-control text-primary">
                                <option selected>Q1 2017</option>
                                <option>Q2 2017</option>
                                <option>Q3 2017</option>
                                <option>Q4 2017</option>
                                <option>Q5 2017</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 pad-l0">
                            <b class="small">Compare To</b>
                            <div class="clearfix"></div>
                            <select class="form-control text-primary">
                                <option>Q1 2017</option>
                                <option>Q2 2017</option>
                                <option selected>Q3 2017</option>
                                <option>Q4 2017</option>
                                <option>Q5 2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bordered clear-back shad rounded col-xs-12 col-sm-3 col-md-3 nopad">
                    <table class="table nomar">
                        <tr>
                            <td><input type="checkbox" class="nomar" onchange="selectComparision(this)"></td>
                            <td>Select all to compare</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="nomar compare-checkbox"></td>
                            <td><b>Total Clients</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="nomar compare-checkbox"><span class="pad-5-10">In-Person Meetings</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="nomar compare-checkbox"><span class="pad-5-10">Phone Call Reports</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="nomar compare-checkbox"></td>
                            <td><b>Promoter Meetings</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" checked class="nomar compare-checkbox"><span class="pad-5-10">In-Person Meetings</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="nomar compare-checkbox"><span class="pad-5-10">Phone Call Reports</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="nomar compare-checkbox"></td>
                            <td><b>New Clients</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" checked class="nomar compare-checkbox"><span class="pad-5-10">New Clients Added</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" checked class="nomar compare-checkbox"><span class="pad-5-10">New Clients Met</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="nomar compare-checkbox"></td>
                            <td><b>All Clients</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="nomar compare-checkbox"><span class="pad-5-10">All Clients Phoned</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="nomar compare-checkbox"><span class="pad-5-10">All Clients Met</span></td>
                        </tr>
                    </table>
                </div>
                <div class="bordered clear-back shad rounded col-xs-12 col-sm-9 col-md-9 nopad">
                    <table class="table table-striped text-center bold nomar">
                        <tr>
                            <td>Q1 2017</td>
                            <td>Q2 2017</td>
                            <td>Q3 2017</td>
                        </tr>
                        <tr>
                            <td>1050 <span class="text-danger">(<small class="glyphicon glyphicon-triangle-bottom"></small> 50%)</span></td>
                            <td>2550 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 83.33%)</span></td>
                            <td>3050 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 17.85%)</span></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td>50 <span class="text-danger">(<small class="glyphicon glyphicon-triangle-bottom"></small> 66.66%)</span></td>
                            <td>100 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 66.66%)</span></td>
                            <td>800 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 155%)</span></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td>50 <span class="text-danger">(<small class="glyphicon glyphicon-triangle-bottom"></small> 66.66%)</span></td>
                            <td>100 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 66.66%)</span></td>
                            <td>800 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 155%)</span></td>
                        </tr>
                        <tr>
                            <td>50 <span class="text-danger">(<small class="glyphicon glyphicon-triangle-bottom"></small> 46.15%)</span></td>
                            <td>80 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 46.15%)</span></td>
                            <td>600 <span class="text-success">(<small class="glyphicon glyphicon-triangle-top"></small> 152%)</span></td>
                        </tr>
                        <tr>
                            <td>40 ( - )</td>
                            <td>40 ( - )</td>
                            <td>300 <span class="text-success">(<small class="glyphicon glyphicon-triangle-bottom"></small> 152%)</span></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div><br/>
