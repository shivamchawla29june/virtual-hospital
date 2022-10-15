(function () {
    var dropzone = document.getElementById('dropzone');
    dropzone.ondragover = function () {
        this.className = 'dropzone dragover';
        return false;
    }
    dropzone.ondragleave = function () {
        this.className = 'dropzone';
        return false;
    }
}());
