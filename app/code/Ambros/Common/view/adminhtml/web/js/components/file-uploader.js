/**
 * @author Ihor Ambrosov <ihor.ambrosov@gmail.com>
 * @license https://opensource.org/licenses/OSL-3.0
 */
define([
    'Magento_Ui/js/form/element/file-uploader'
], function (Element) {
    'use strict';

    return Element.extend({
        
        defaults: {
            fileInputName: ''
        },
        
        addFile: function (file) {
            var processedFile = this.processFile(file),
                tmpFile = [],
                resultFile = {
                    'file': processedFile.file,
                    'name': processedFile.name,
                    'size': processedFile.size,
                    'status': processedFile.status ? processedFile.status : 'new'
                };
            tmpFile[0] = resultFile;
            this.isMultipleFiles ?
                this.value.push(tmpFile) :
                this.value(tmpFile);
            return this;
        }
        
    });
});
