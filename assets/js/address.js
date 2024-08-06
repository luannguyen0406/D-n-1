const host = "https://location.thevolunty.com/api/";

// Helper function to call APIs
const callAPI = (api, callback) => {
    return axios.get(api)
        .then(response => {
            callback(response.data);
        })
        .catch(error => {
            console.error('Error calling API:', error);
        });
}

// Call API for provinces
const callProvinces = () => {
    callAPI(host + 'p/', data => {
        renderData(data, 'province');
    });
}

// Call API for districts
const callDistricts = (provinceId) => {
    callAPI(host + 'p/' + provinceId + '?depth=2', data => {
        renderData(data.districts, 'district');
    });
}

// Call API for wards
const callWards = (districtId) => {
    callAPI(host + 'd/' + districtId + '?depth=2', data => {
        renderData(data.wards, 'ward');
    });
}

// Render data into select elements
const renderData = (array, select) => {
    let options = '<option disabled value="">Chọn vùng</option>';
    if (Array.isArray(array)) {
        array.forEach(element => {
            options += `<option value="${element.code}">${element.name}</option>`;
        });
    }
    document.querySelector(`#${select}`).innerHTML = options;
}

// Initialize UI states
$("#quan").hide();
$("#xa").hide();
$("#so").hide();

// Event listener for province change
$("#province").change(() => {
    const provinceId = $("#province").val();
    if (provinceId) {
        callDistricts(provinceId);
        $("#quan").show();
        $("#xa").hide();
        $("#so").hide();
    } else {
        $("#quan").hide();
        $("#xa").hide();
        $("#so").hide();
    }
});

// Event listener for district change
$("#district").change(() => {
    const districtId = $("#district").val();
    if (districtId) {
        callWards(districtId);
        $("#xa").show();
        $("#so").hide();
    } else {
        $("#xa").hide();
        $("#so").hide();
    }
});

// Event listener for ward change
$("#ward").change(() => {
    if ($("#ward").val()) {
        $("#so").show();
    } else {
        $("#so").hide();
    }
    printResult();
});

// Print selected province, district, and ward
const printResult = () => {
    if ($("#district").val() && $("#province").val() && $("#ward").val()) {
        const result = `${$("#province option:selected").text()} | ${$("#district option:selected").text()} | ${$("#ward option:selected").text()}`;
        $("#result").text(result);
    }
}

// Load provinces on page load
$(document).ready(() => {
    callProvinces();
});
