const canvas = new fabric.Canvas('canvas');

// enable selection
canvas.selection = true;

// delete selected object
function deleteObject() {
    const active = canvas.getActiveObject();
    if (active) {
        canvas.remove(active);
    }
}