import TomSelect from "tom-select";

const pilihProdukPengadaan = document.querySelector("#pilih-produk-pengadaan");
if (pilihProdukPengadaan) {
    new TomSelect(`#${pilihProdukPengadaan.id}`, {
        maxItems: 10,
        onChange: function (products) {
            document.querySelector("#qty-selected-product").innerHTML = null;

            Array.from(products).forEach((productId, index) => {
                const qtySelectedProductTemplate = document.querySelector("#fill-qty-selected-product").content;

                const qtySelectedProductNode = document.importNode(qtySelectedProductTemplate, true);

                const productNameSelected = document.querySelector(
                    `#pilih-produk-pengadaan [value="${productId}"]`
                ).textContent;

                const labelSelectedQtyProduct = qtySelectedProductNode.querySelector(".label-qty-selected-product");

                labelSelectedQtyProduct.htmlFor = `qty-selected-product-column-${index}`;

                qtySelectedProductNode.querySelector(
                    ".input-qty-selected-product"
                ).id = `qty-selected-product-column-${index}`;

                labelSelectedQtyProduct.textContent = `Stok ${productNameSelected}`;

                document.querySelector("#qty-selected-product").appendChild(qtySelectedProductNode);
            });
        },
    });
}
