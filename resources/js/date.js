import AirDatepicker from "air-datepicker";
import localeEn from 'air-datepicker/locale/en';
import 'air-datepicker/air-datepicker.css';

const disabledMonth = [1, 2, 4, 5, 7, 8, 10, 11]
new AirDatepicker('.disable-date-triwulan', {
    locale: localeEn,
    dateFormat: 'yyyy-MM-dd',
    onRenderCell: ({ date, cellType }) => {
        if (cellType === 'month' || cellType === 'day') {
            const month = date.getMonth()
            const isDisabled = disabledMonth.indexOf(month) != -1

            return {
                disabled: isDisabled
            }
        }

    }
})
