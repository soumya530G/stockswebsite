const COLORS = {
    open: '#ff0000',
    high: '#008000',
    low: '#373c43',
}
const CASE_STATUS = {
    open: 'open',
    high: 'high',
    low: 'low',
}

let body = document.querySelector('body')

//let countries_list

//let all_time_chart, days_chart, recover_rate_chart

window.onload = async () => {
    console.log('ready...')
    initTheme()
    await loadData('Global')
}
loadData = async (country) => {
    await loadSummary(country)
}
isGlobal = (country) => {
    return country === 'Global'
}

loadSummary = async (country) => {
    let summaryData = await stockApi.getSummary()
    console.log(summaryData)
}
initTheme = () => {
    let dark_mode_switch = document.querySelector('#darkmode-switch')

    dark_mode_switch.onclick = () => {
        dark_mode_switch.classList.toggle('dark')
        body.classList.toggle('dark')

        setDarkChart(body.classList.contains('dark'))
    }
}
