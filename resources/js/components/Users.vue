<template>
<div class="container-fluid">
   <div class="row">           
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                  <h4 class="card-title">Users</h4>
                  <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"><i class="material-icons">person_add</i> Add User<div class="ripple-container"></div></button>                  
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Job Position</th>
                                <th>Branch</th>
                                <th class="text-right">Status</th>
                                <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="text-center">1</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td class="text-right">€ 99,225</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                                    <i class="material-icons">person</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td class="text-center">2</td>
                                <td>John Doe</td>
                                <td>Design</td>
                                <td>2012</td>
                                <td class="text-right">€ 89,241</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
                                    <i class="material-icons">person</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td class="text-center">3</td>
                                <td>Alex Mike</td>
                                <td>Design</td>
                                <td>2010</td>
                                <td class="text-right">€ 92,144</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="">
                                    <i class="material-icons">person</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td class="text-center">4</td>
                                <td>Mike Monday</td>
                                <td>Marketing</td>
                                <td>2013</td>
                                <td class="text-right">€ 49,990</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
                                    <i class="material-icons">person</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td class="text-center">5</td>
                                <td>Paul Dickens</td>
                                <td>Communication</td>
                                <td>2015</td>
                                <td class="text-right">€ 69,201</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                                    <i class="material-icons">person</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                    </button>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </div>    
    <!-- Classic Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                </p>
                <div class="form-group bmd-form-group is-filled">
                <label class="label-control">Datetime Picker</label>
                <input type="text" class="form-control datetimepicker" value="07/02/2018">
                <span class="material-input"></span>
                <span class="material-input"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-sm"><i class="material-icons">person_add</i> Add User<div class="ripple-container"></div></button>
                <button class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
