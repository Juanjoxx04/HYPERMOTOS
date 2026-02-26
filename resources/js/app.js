import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".btn-add-cart").forEach((button) => {
        button.addEventListener("click", async function () {
            const productoId = this.dataset.productoId;
            const storeUrl = this.dataset.storeUrl;

            try {
                const response = await fetch(storeUrl, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector(
                            'meta[name="csrf-token"]',
                        ).content,
                        Accept: "application/json",
                    },
                    body: JSON.stringify({
                        producto_id: productoId,
                        cantidad: 1,
                    }),
                });

                const data = await response.json();
                updateCartBadge(data.cartCount);

                this.classList.add("btn-success");
                setTimeout(() => this.classList.remove("btn-success"), 1000);
            } catch (error) {
                console.error("Error al añadir al carrito:", error);
            }
        });
    });
});

function updateCartBadge(count) {
    let badge = document.querySelector(".btn-cart span");

    if (count > 0) {
        if (badge) {
            badge.textContent = count;
        } else {
            badge = document.createElement("span");
            badge.className =
                "absolute top-1 right-1 bg-red-600 text-white text-xs rounded-full px-2 font-bold w-5 h-5 flex items-center justify-center";
            badge.textContent = count;
            document.querySelector(".btn-cart").appendChild(badge);
        }
    }
}
