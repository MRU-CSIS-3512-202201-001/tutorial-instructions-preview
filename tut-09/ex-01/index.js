document.addEventListener("DOMContentLoaded", () => {
  const quantityField = document.querySelector("#quantity");
  const orderTotalField = document.querySelector("#order-total");
  quantityField.addEventListener("change", () => {
    let quantity = quantityField.value;
    let totalCents = quantity * 150;
    let displayedCost = new Intl.NumberFormat("en-CA", {
      style: "currency",
      currency: "CAD",
    }).format(totalCents / 100);
    document.querySelector("#order-total").value = displayedCost;
  });
});
