import getValue from './get-value.js';
import onCellClick from './game.js';

window.onload = function () {
  document.getElementById('start').addEventListener('click', generateField);
};

function generateField() {
  const fieldBox = document.getElementById('fieldBox');
  fieldBox.innerHTML = '';

  let size = getValue();
  let cell = document.createElement('div');
  cell.setAttribute('class', 'cell');

  let row = document.createElement('div');
  row.setAttribute('class', 'row');

  let field = new Array(size.width);
  for (let i = 0; i < size.width; i++) {
    let currentRow = row.cloneNode(true);
    fieldBox.append(currentRow);
    field[i] = new Array(size.height);
    for (let j = 0; j < size.height; j++) {
      let currentCell = cell.cloneNode(true);
      currentCell.id = `cell-${i}${j}`;
      currentRow.append(currentCell);

      currentCell = currentRow.querySelector(`#cell-${i}${j}`);
      field[i][j] = currentCell;

      field[i][j].addEventListener('click', (event) =>
        onCellClick(event, field)
      );
    }
  }
}
