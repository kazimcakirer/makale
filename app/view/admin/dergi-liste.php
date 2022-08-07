<?php require_once 'static/header.php'; ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Add &amp; Remove Rows</h4>
            <p class="text-muted m-b-30 font-13">
                Add or remove rows from your FooTable.
            </p>

            <div class="mb-3">
                <div class="row">
                    <div class="col-12 text-sm-center form-inline">
                        <div class="form-group mr-2">
                            <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                        </div>
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>

            <table id="demo-foo-addrow" class="table table-striped table-bordered m-b-0 toggle-circle tablet breakpoint footable-loaded footable" data-page-size="7">
                <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-first-column"></th>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">First Name<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">Last Name<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Job Title<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-sortable" style="display: none;">DOB<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-sortable" style="display: none;">Status<span class="footable-sort-indicator"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="footable-even" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-odd" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-even" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-odd" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-even" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-odd" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-even" >
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-even" style="display: none;">
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td style="text-align: center;" class="footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Adam</td>
                        <td class="footable-visible">Doe</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success   ">Active</span></td>
                    </tr>
                    <tr class="footable-even" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Easer</td>
                        <td class="footable-visible">Dragoo</td>
                        <td class="footable-visible footable-last-column">Drywall Stripper</td>
                        <td style="display: none;">13 Dec 1977</td>
                        <td style="display: none;"><span class="badge label-table badge-success">Active</span></td>
                    </tr>
                    <tr class="footable-row-detail" style="display: none;">
                        <td class="footable-row-detail-cell" colspan="4">
                            <div class="footable-row-detail-inner">
                                <div class="footable-row-detail-row">
                                    <div class="footable-row-detail-name">DOB:</div>
                                    <div class="footable-row-detail-value">13 Dec 1977</div>
                                </div>
                                <div class="footable-row-detail-row">
                                    <div class="footable-row-detail-name">Status:</div>
                                    <div class="footable-row-detail-value"><span class="badge label-table badge-success">Active</span></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Granville</td>
                        <td class="footable-visible">Leonardo</td>
                        <td class="footable-visible footable-last-column">Business Services Sales Representative</td>
                        <td style="display: none;">19 Apr 1969</td>
                        <td style="display: none;"><span class="badge label-table badge-danger">Suspended</span></td>
                    </tr>
                    <tr class="footable-even" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Isidra</td>
                        <td class="footable-visible">Boudreaux</td>
                        <td class="footable-visible footable-last-column">Traffic Court Referee</td>
                        <td style="display: none;">22 Jun 1972</td>
                        <td style="display: none;"><span class="badge label-table badge-success">Active</span></td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Judi</td>
                        <td class="footable-visible">Badgett</td>
                        <td class="footable-visible footable-last-column">Electrical Lineworker</td>
                        <td style="display: none;">23 Jun 1981</td>
                        <td style="display: none;"><span class="badge label-table badge-success">Active</span></td>
                    </tr>
                    <tr class="footable-even" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Lauri</td>
                        <td class="footable-visible">Hyland</td>
                        <td class="footable-visible footable-last-column">Blackjack Supervisor</td>
                        <td style="display: none;">15 Nov 1985</td>
                        <td style="display: none;"><span class="badge label-table badge-danger">Suspended</span></td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Lizzee</td>
                        <td class="footable-visible"><a href="#">Goodlow</a></td>
                        <td class="footable-visible footable-last-column">Technical Services Librarian</td>
                        <td style="display: none;">1 Nov 1961</td>
                        <td style="display: none;"><span class="badge label-table badge-danger">Suspended</span></td>
                    </tr>
                    <tr class="footable-even" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Lorraine</td>
                        <td class="footable-visible">Mcgaughy</td>
                        <td class="footable-visible footable-last-column">Hemodialysis Technician</td>
                        <td style="display: none;">11 Nov 1983</td>
                        <td style="display: none;"><span class="badge label-table badge-custom">Disabled</span></td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Maple</td>
                        <td class="footable-visible">Halladay</td>
                        <td class="footable-visible footable-last-column">Aviation Tactical Readiness Officer</td>
                        <td style="display: none;">30 Dec 1991</td>
                        <td style="display: none;"><span class="badge label-table badge-danger">Suspended</span></td>
                    </tr>
                    <tr class="footable-even" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Maxine</td>
                        <td class="footable-visible"><a href="#">Woldt</a></td>
                        <td class="footable-visible footable-last-column"><a href="#">Business Services Sales Representative</a></td>
                        <td style="display: none;">17 Oct 1987</td>
                        <td style="display: none;"><span class="badge label-table badge-custom">Disabled</span></td>
                    </tr>
                    <tr class="footable-odd" style="display: none;">
                        <td class="text-center footable-visible footable-first-column"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                        <td class="footable-visible"><span class="footable-toggle"></span>Shona</td>
                        <td class="footable-visible">Woldt</td>
                        <td class="footable-visible footable-last-column">Airline Transport Pilot</td>
                        <td style="display: none;">3 Oct 1981</td>
                        <td style="display: none;"><span class="badge label-table badge-custom">Disabled</span></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="active">
                        <td colspan="6" class="footable-visible">
                            <div class="text-right">
                                <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10">
                                    <li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li>
                                    <li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li>
                                    <li class="footable-page active"><a data-page="0" href="#">1</a></li>
                                    <li class="footable-page"><a data-page="1" href="#">2</a></li>
                                    <li class="footable-page"><a data-page="2" href="#">3</a></li>
                                    <li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li>
                                    <li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php require_once 'static/footer.php'; ?>