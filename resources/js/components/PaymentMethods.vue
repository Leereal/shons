<template>
   <div class="row">           
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">payment</i>
                  </div>
                  <h4 class="card-title">Payment Methods</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Interest</th>
                                <th>Admin Fee</th>
                                <th class="text-right">Service Fee</th>
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
