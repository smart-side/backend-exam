$(document).ready(function () {

    var ModelProducts = Backbone.Model.extend({
        urlRoot: '/api/productsapi'
    });

    var ColectionProducts = Backbone.Collection.extend({
        model: ModelProducts,
        url: '/api/productsapi'
    });

    var ItemView = Backbone.View.extend({
        tagName: 'tr',
        template: _.template($('#tplProductItemID').html()),
        events: {
            'click button.btndelete': 'remove'
        },
        initialize: function ()
        {
            _.bindAll(this, 'render', 'unrender', 'remove');

            this.model.bind('change', this.render);
            this.model.bind('remove', this.remove);
        },
        render: function ()
        {
            this.$el.html(this.template(this.model.toJSON()));
            return this;
        },
        unrender: function ()
        {
            $(this.el).remove();
        },
        remove: function ()
        {
            var scope = this
            this.model.destroy({
                success: (function () {
                    scope.unrender();
                })
            });
        }

    });


    var ListView = Backbone.View.extend({
        el: $('#productsContentID'),
        events: {
            'click button#btnSaveProductID': 'saveItem',
            'click button.btnedit': 'editItem',
        },
        initialize: function ()
        {
            _.bindAll(this, 'render', 'saveItem', 'appendItem');

            this.collection = new ColectionProducts();
            this.collection.bind('add', this.appendItem);
            this.collection.fetch();
            this.render();
        },
        render: function ()
        {
            var self = this;
            _(this.collection.models).each(function (item) {
                self.appendItem(item);
            }, this);
        },
        saveItem: function ()
        {
            var collection = this.collection;

            var id = $(this.el).attr('id');

            var data = {};
            $("#" + id + ' input').each(function () {

                if (this.value === undefined || this.value === '') {
                    return;
                }

                if (data[this.name] !== undefined) {
                    if (!data[this.name].push) {
                        data[this.name] = [data[this.name]];
                    }
                    data[this.name].push(this.value || '');
                } else {
                    data[this.name] = this.value || '';
                }
            });

            $("#" + id + ' form')[0].reset();

            if (data.id) {
                var model = collection.get(data.id);
                model.save(data);
            } else {
                var modelProduct = new ModelProducts();
                modelProduct.save(data, {
                    success: (function () {
                        modelProduct.fetch();
                        collection.add(modelProduct);
                    })
                });
            }


        },
        appendItem: function (item)
        {
            var itemView = new ItemView({
                model: item
            });

            $('#tbodyProductItensID', this.el).prepend(itemView.render().el);
        },
        editItem: function (ev)
        {
            var el_data = $(ev.currentTarget).data();
            var model = this.collection.get(el_data.id);
            var data = model.toJSON();
            var elid = $(this.el).attr('id');
            var formId = '#' + $('#' + elid + ' form').attr('id');

            $.each(data, function (key, value) {
                var $ctrl = $('[name=' + key + ']', formId);
                if ($ctrl.is('select')) {
                    $("option", $ctrl).each(function () {
                        if (this.value == value) {
                            this.selected = true;
                        }
                    });
                } else {
                    switch ($ctrl.attr("type"))
                    {
                        case "text" :
                        case "hidden":
                        case "textarea":
                            $ctrl.val(value);
                            break;
                        case "radio" :
                        case "checkbox":
                            $ctrl.each(function () {
                                if ($(this).attr('value') == value) {
                                    $(this).attr("checked", value);
                                }
                            });
                            break;
                    }
                }
            });

            window.location = '#';
        }
    });

    var listView = new ListView();
});