<?php
//css
$this->Html->css('select2.css', ['block' => 'cssBottom']);
$this->Html->css('select2-bootstrap.css', ['block' => 'cssBottom']);

//js
$this->Html->script('select2.js', ['block' => 'scriptBottom']);
$this->Html->script('select2-init.js', ['block' => 'scriptBottom']);

$this->Html->script('App/Products', ['block' => 'scriptBottom']);
?>

<div class="wrapper" id="productsContentID">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" >
                    Products
                </header>
                <div class="panel-body">
                    <form role="form" id="formProducsID">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label class="sr-only" for="inputNameID">Name</label>
                                            <input type="hidden" name="id" id="inputidID" />
                                            <input type="text" name="name" class="form-control" id="inputNameID" placeholder="Name" />
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6">
                                            <label class="sr-only" for="inputDescriptionID">Description</label>
                                            <input type="text" name="description" class="form-control" id="inputDescriptionID" placeholder="Description">
                                        </div>
                                        <div class="form-group col-lg-2 col-md-2 pull-right">
                                            <button type="button" id="btnSaveProductID" class="btn btn-success btnAddProduct">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                        </div>
                    </form>
                </div>
            </section>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading head-border">
                    Custom Table
                </header>
                <table class="table table-striped custom-table table-hover">
                    <thead>
                        <tr>
                            <th><i class="fa fa-building-o"></i> Name</th>
                            <th class="hidden-xs"><i class="fa fa-building-o"></i> Descrition</th>
                            <th><i class="fa fa-bookmark-o"></i> Category</th>
                            <th class="hidden-xs"><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyProductItensID">
                        <!--Products-->
                    </tbody>
                </table>
                <script type="text/template" id="tplProductItemID">
                        <td><a href="#"><%- name %></a></td>
                        <td><%- description %></td>
                        <td class="hidden-xs">
                            <span class="label bg-success pull-right" style="margin-right: 4px;">new</span>
                            <span class="label bg-success pull-right" style="margin-right: 4px;">new</span>
                            <span class="label bg-success pull-right" style="margin-right: 4px;">new</span>
                        </td>
                        <td class="">
                            <button class="btn btn-primary btn-xs btnedit" data-id="<%- id %>" ><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs btndelete" data-id="<%- id %>"><i class="fa fa-trash-o "></i></button>
                        </td>
                </script>
            </section>
        </div>
    </div>
</div>
