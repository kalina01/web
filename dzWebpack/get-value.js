export default function getValue() {
  let width = document.getElementById('width');
  let height = document.getElementById('height');

  return {
    width: width.value,
    height: height.value,
  };
}
