var UITree = function () {

    return {
        //main function to initiate the module
        init: function () {

            var DataSourceTree = function (options) {
                this._data  = options.data;
                this._delay = options.delay;
            };

            DataSourceTree.prototype = {

                data: function (options, callback) {
                    var self = this;

                    setTimeout(function () {
                        var data = $.extend(true, [], self._data);

                        callback({ data: data });

                    }, this._delay)
                }
            };
            
            // INITIALIZING TREE
            var treeDataSource = new DataSourceTree({
                data: [
                    { name: 'Sales', type: 'folder' },
                    { name: 'Reports', type: 'item', additionalParameters: { id: 'I1' } },
                    { name: 'Finance', type: 'item', additionalParameters: { id: 'I2' } },
                    { name: 'Finance1', type: 'item', additionalParameters: { id: 'I3' } }
                ],
                delay: 400
            });

             

            $('#MyTree').tree({
                dataSource: treeDataSource,
                loadingHTML: '<img src="/themes/metronic/img/input-spinner.gif"/>',
            });


          
        }

    };

}();