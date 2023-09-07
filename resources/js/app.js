import axios from "axios";
import "flowbite";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import "./input-tel";
import "./date"
import "./select";
import "./page/procurement";
