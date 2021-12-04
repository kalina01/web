export default function onCellClick(event, field) {
  let id = event.currentTarget.id;
  // const field = event.field;
  let x = parseInt(id[5]);
  let y = parseInt(id[6]);

  for (let i = 0; i < field.length; i++) {
    switchActive(field[i][y]);
  }
  for (let i = 0; i < field[0].length; i++) {
    switchActive(field[x][i]);
  }
  switchActive(field[x][y]);
}

function switchActive(cell) {
  if (cell.classList.contains('active')) {
    cell.classList.remove('active');
  } else {
    cell.classList.add('active');
  }
}
