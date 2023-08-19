import TomSelect from "tom-select";

const basicSelect = document.querySelectorAll(".basic-select");
if (basicSelect.length > 0) {
    basicSelect.forEach((eachSelect) => {
        new TomSelect(`#${eachSelect.id}`, {
            maxItems: eachSelect.hasAttribute("multiple") ? 10 : 1,
        });
    });
}
