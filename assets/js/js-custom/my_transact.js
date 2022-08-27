let TOTAL_COMMISSION = 0;
let TOTAL_TRANSACTIONS = 0;
let table = null;
let table2 = null
let SUB_TOTAL=0;
let UTILITIES_ARRAY=['NRWBPrepaid','GoTv','BWBPrepaid','DSTv','SRWBPrepaid','LWBPrepaid']
let DEPOSIT_ARRAY=['FirstDeposit','Deposit']


function _ready() {

    // let total_deposits = 0;
    // let total_withdraws = 0;
    // let total_utilities = 0;
    // let others_total = 0
    // TOTAL_COMMISSION = 0;
    // for (const [key, value] of Object.entries(all_my_agents)) {
    //     total_deposits += (dashboardSummary(value.agentid, "depositsSummary"))
    //     total_withdraws += (dashboardSummary(value.agentid, "withdrawSummary"))
    //     total_utilities += (dashboardSummary(value.agentid, "utilitiesSummary"))
    //     others_total += (dashboardSummary(value.agentid, "othersSummary"))
    // }
    getDashboardData()
    agentsDropDown()
    dbimport()

    defineTable()

    table2 = $('#datatable').DataTable({
        dom: 'Bfrtip',
        "bPaginate": false,
        buttons: [
            'print'
        ]
    });
}

function defineTable(){
    table = $('#datatable2').DataTable({
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;

            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };

            // computing column Total of the complete result
            let depoTotal = api
                .column( 3,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var depoCount = api
                .column( 4 ,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var withTotal = api
                .column( 5 ,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var withCount = api
                .column( 6,{"filter": "applied"} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var utilTotal = api
                .column( 7 ,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var utilCount = api
                .column( 8 ,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var otTotal = api
                .column( 9 ,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var otCount = api
                .column( 10 ,{"filter": "applied"})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );


            // Update footer by showing the total with the reference of the column index
            $( api.column( 0 ).footer() ).html('');
            $( api.column( 1 ).footer() ).html('');
            $( api.column( 2 ).footer() ).html('Total');
            $( api.column( 3 ).footer() ).html(formatNumber(depoTotal));
            $( api.column( 4 ).footer() ).html(formatNumber(depoCount));
            $( api.column( 5 ).footer() ).html(formatNumber(withTotal));
            $( api.column( 6 ).footer() ).html(formatNumber(withCount));
            $( api.column( 7 ).footer() ).html(formatNumber(utilTotal));
            $( api.column( 8 ).footer() ).html(formatNumber(utilCount));
            $( api.column( 9 ).footer() ).html(formatNumber(otTotal));
            $( api.column( 10 ).footer() ).html(formatNumber(otCount));
        },
        dom: 'Bfrtip',
        "bPaginate": true,
        buttons: [
            'print'
        ]
    });
}

function showDashboard() {
    get("transactions").style.display = "none"
    get("all_agents_view").style.display = "none"
    get("summary").style.display = "inline"
}

function dbimport() {
    let url = getValue("base_url") + "transactions/dbimport"
    $.ajax({
        url: url,
        method: "POST",
        data: {
            filename: '..\\..\\..\\data\\transactions.json'
        },
        success: function(data) {
            console.log()
        }
    });
}

function agentsDropDown() {
    let response = JSON.parse(getMyAgents())
    let all_data = "";
    for (const [key, value] of Object.entries(response)) {
        all_data += "<option";
        all_data += " value=" + value.agentid + ">"
        all_data += value.officelocation.toUpperCase() + "-" + value.agentid
        all_data += "</option>"
    }
    setValue("agent_id_for_filter", all_data)
}

function agents() {
    table.clear()
    get("agents_loader").style.display = "inline"
        // let response = JSON.parse(getMyAgents())
        //     // let all_data = "";
        // for (const [key, value] of Object.entries(response)) {
        //     // all_data += "<tr>";
        //     // all_data += "<td>" + value.agentid + "</td>"
        //     // all_data += "<td>" + value.officelocation.toUpperCase() + "</td>"
        //     // all_data += "<td>" + value.business_name.toUpperCase() + "</td>"
        //     // all_data += "<td><b id=" + value.agentid + "_deposits" + " > </b></td>"
        //     // all_data += "<td><b id=" + value.agentid + "_withdraws" + " > </b></td>"
        //     // all_data += "<td><b id=" + value.agentid + "_utilities" + " > </b></td>"
        //     // all_data += "<td><b id=" + value.agentid + "_others" + " > </b></td>"
        //     // all_data += "<td><button class='btn btn-primary btn-sm' onclick='transactions(" + value.agentid + ")'><i class='fa fa-eye'></i></button></td>"
        //     // all_data += "</tr>";

    //     table.row.add([
    //         value.agentid,
    //         value.officelocation.toUpperCase(),
    //         value.business_name.toUpperCase(),
    //         "<b id=" + value.agentid + "_deposits" + " ></b>",
    //         "<td><b id=" + value.agentid + "_withdraws" + " > </b>",
    //         "<b id=" + value.agentid + "_utilities" + " > </b>",
    //         "<b id=" + value.agentid + "_others" + " > </b>",
    //         "<button class='btn btn-primary btn-sm' onclick='transactions(" + value.agentid + ")'><i class='fa fa-eye'></i></button>"
    //     ]).draw(true);
    // }
    let today=getValue('filter_end_date')
    let start=getValue('filter_start_date')
    reportsFilter(start,today)

    get("summary").style.display = "none"
    get("agents_loader").style.display = "none"
    get("all_agents_view").style.display = "inline"
        //setValue("all_agents", all_data)
    get("transactions").style.display = "none"

    //agentAllTransactions()
}

function reports() {
    let date = getValue("report_category")
    setValue("start_date", date)
    let url = getValue("base_url") + "transactions/reports/" + date
    $.ajax({
        url: url,
        method: "GET",
        success: function(data) {
            get("agents_loader").style.display=''
            table.clear().draw()
            populateReports(JSON.parse(data),1)
        }
    });
}

function reportsFilter(start,end) {
    setValue('start_date',start)
    let url = getValue("base_url") + "transactions/reportsFilter"
    $.ajax({
        url: url,
        data:{'start':start, 'end':end,'ref':'all_transactions'},
        method: "POST",
        success: function(data) {
            get("agents_loader").style.display=''
            table.clear().draw()
            populateReports(JSON.parse(data),2)
        }
    });
}

function groupByKey(array, key) {
    return array
        .reduce((hash, obj) => {
            if(obj[key] === undefined) return hash;
            return Object.assign(hash, { [obj[key]]:( hash[obj[key]] || [] ).concat(obj)})
        }, {})
}


function groupByMoreKeys(arr, mainFilter,secFilter){
    let result = arr.reduce(function(map, obj)
    {

        let f1 = map[obj[mainFilter]] = map[obj[mainFilter]] || {};

        if(Object.prototype.toString.call(obj[secFilter]) === '[object Array]')
        {
            let idx;
            for(idx in obj[secFilter])
            {
                let f2 = f1[obj[secFilter][idx]] = f1[obj[secFilter][idx]] || [];
                f2.push(obj);
            }
        }
        else
        {
            let f2 = f1[obj[secFilter]] = f1[obj[secFilter]] || [];
            f2.push(obj);
        }

        return map;
    }, Object.create(null));
    return result
}


function sumJsonData(data){
    let result = data.reduce(function(_this, val) {
        return _this + Number(val.amount)
    }, 0);

    return result
}

function filterItems(arr, agentid) {
    return arr.find(item => item.agentid === agentid);
}

Object.size = function(obj) {
    let size = 0,
        key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

function populateReports(data,category) {
    let agents = JSON.parse(getMyAgents())
    let transactions_grouped=groupByMoreKeys(data, "agentid","req_type")
    for (const [agentid, transaction_category] of Object.entries(transactions_grouped)) {
        let deposits = 0;
        let withdraws = 0;
        let utilities = 0;
        let others = 0;


        let depositCount=0;
        let withdrawsCount=0
        let utilitiesCount=0;
        let othersCount=0;

        let agent_details=filterItems(agents,agentid)
        for (const [transaction_type, transactions] of Object.entries(transaction_category)) {
            if (DEPOSIT_ARRAY.indexOf(transaction_type) !== -1 ) {
                deposits+=sumJsonData(transactions)
                depositCount+=Object.size(transactions)
            } else if (transaction_type==='Withdraw') {
                withdraws+=sumJsonData(transactions)
                withdrawsCount+=Object.size(transactions)
            } else if (UTILITIES_ARRAY.indexOf(transaction_type)!==-1) {
                utilities+=sumJsonData(transactions)
                utilitiesCount+=Object.size(transactions)
            } else if (transaction_type=='LoanRepayment') {
                others+=sumJsonData(transactions)
                othersCount+=Object.size(transactions)
            }
        }

        addTableColumn(table,[
            agent_details.agentid,
            agent_details.officelocation.toUpperCase(),
            agent_details.business_name.toUpperCase(),
            formatNumber(deposits),
            formatNumber(withdraws),
            formatNumber(utilities),
            formatNumber(others),
            formatNumber(depositCount),
            formatNumber(withdrawsCount),
            formatNumber(utilitiesCount),
            formatNumber(othersCount),
            "<button class='btn btn-primary btn-sm' onclick='transactions(" + agent_details.agentid + ")'><i class='fa fa-eye'></i></button>"
        ]);
    }

    // return
    // for (const [key, agent] of Object.entries(agents)) {
    //     let deposits = 0;
    //     let withdraws = 0;
    //     let utilities = 0;
    //     let others = 0;
    //
    //     let depositCount=0;
    //     let withdrawsCount=0
    //     let utilitiesCount=0;
    //     let othersCount=0;
    //
    //     for (const [key, transaction] of Object.entries(data)) {
    //         if (agent.agentid == transaction.agentid && (transaction.req_type == 'deposits' || DEPOSIT_ARRAY.indexOf(transaction.req_type) !== -1 )) {
    //             deposits += parseNumber(transaction.amount)
    //             depositCount+=1
    //         } else if (agent.agentid == transaction.agentid && (transaction.req_type == 'withdraws' || transaction.req_type=='Withdraw')) {
    //             withdraws += parseNumber(transaction.amount)
    //             withdrawsCount+=1
    //         } else if (agent.agentid == transaction.agentid && (transaction.req_type == 'utilities' || UTILITIES_ARRAY.indexOf(transaction.req_type)!==-1)) {
    //             utilities += parseNumber(transaction.amount)
    //             utilitiesCount+=1
    //         } else if (agent.agentid == transaction.agentid && (transaction.req_type == 'others' || transaction.req_type=='LoanRepayment')) {
    //             others += parseNumber(transaction.amount)
    //             othersCount+=1
    //         }
    //
    //     }
    //
    //     if(category==1){
    //         table.row.add([
    //             agent.agentid,
    //             agent.officelocation.toUpperCase(),
    //             agent.business_name.toUpperCase(),
    //             formatNumber(deposits),
    //             formatNumber(withdraws),
    //             formatNumber(utilities),
    //             formatNumber(others),
    //             "<button class='btn btn-primary btn-sm' onclick='transactions(" + agent.agentid + ")'><i class='fa fa-eye'></i></button>"
    //         ]).draw(true);
    //     }else{
    //         addTableColumn(table,[
    //             agent.agentid,
    //             agent.officelocation.toUpperCase(),
    //             agent.business_name.toUpperCase(),
    //             formatNumber(deposits),
    //             formatNumber(withdraws),
    //             formatNumber(utilities),
    //             formatNumber(others),
    //             formatNumber(depositCount),
    //             formatNumber(withdrawsCount),
    //             formatNumber(utilitiesCount),
    //             formatNumber(othersCount),
    //             "<button class='btn btn-primary btn-sm' onclick='transactions(" + agent.agentid + ")'><i class='fa fa-eye'></i></button>"
    //         ]);
    //     }
    //
    // }

    //add summary column
    // addTableColumn(table, ['','','TOTAL',formatNumber(depositsTotal),formatNumber(depositCountTotal),formatNumber(withdrawTotal),
    //     formatNumber(withddrawCountTotal),formatNumber(utilitiesTotal),formatNumber(utilitiesCountTotal),formatNumber(othersTotal),formatNumber(othersCountTotal),''])
    get("agents_loader").style.display='none'
}

function addTableColumn(table, data){
   table.row.add(data).draw(true)
}

function agentAllTransactions() {
    let url = getValue("base_url") + "transactions/agent_all_transactions"
    let deposits = 0
    let withdraws = 0;
    let utilities = 0;
    let others = 0;
    let commission = 0
    $.ajax({
        url: url,
        method: "GET",
        success: function(data) {
            let response = JSON.parse(data)
            for (const [key, value] of Object.entries(response)) {
                setValue(value.agentid + "_" + value.req_type, formatter(value.amount))

                if (value.req_type == 'deposits') {
                    deposits += value.amount
                } else if (value.req_type == 'withdraws') {
                    withdraws += value.amount
                } else if (value.req_type == 'utilities') {
                    utilities += value.amount
                } else if (value.req_type == 'others') {
                    others += value.amount
                }
                if (!isNaN(value.agent_commission)) {
                    commission += value.agent_commission
                }
            }

        }
    });


}

function  numberFormatter(number){
    return new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(number)
}

function countTransactions(total_transactions){
    let total=JSON.parse(total_transactions.data)
    return total.length
}
function  parseNumber(stringValue){
    return Number(stringValue)
}
function getDashboardData() {
    let total_amount=0;
    let total_transaction=0;

    //all agents
    let agents=agentsFormatted();

    //deposits--------------------------------------------
    let deposits=countTransactions(getTrasactionsData(agents, "deposits"))
    total_transaction+=deposits;
    setValue("total_deposits",formatNumber(deposits))

    let deposits_amount=dashboardSummary('depositsSummary')
    total_amount+=parseNumber(deposits_amount)
    setValue("depositsSummary", formatter(deposits_amount))
    get("total_deposits_loader").style.display = "none"


    //withdraws--------------------------------------------
    let withdraws=countTransactions(getTrasactionsData(agents, "withdraws"))
    total_transaction+=withdraws;
    setValue("total_withdraws",formatNumber(withdraws))

    let total_withdraws=dashboardSummary('withdrawSummary')
    total_amount+=parseNumber(total_withdraws)
    setValue("withdrawsSummary", formatter(total_withdraws))
    get("total_withdraw_loader").style.display = "none"


    //utilities
    let utilities=countTransactions(getTrasactionsData(agents, "utilities"))
    total_transaction+=utilities;
    setValue("total_utilities",formatNumber(utilities))

    let total_utilities=dashboardSummary('utilitiesSummary')
    total_amount+=parseNumber(total_utilities)
    setValue("utilitiesSummary", formatter(total_utilities))
    get("total_utility_loader").style.display = "none"


    //others
    let others=countTransactions(getTrasactionsData(agents, "others"))
    total_transaction+=others;
    setValue("total_others",formatNumber(others))

    let total_others=dashboardSummary('othersSummary')
    total_amount+=parseNumber(total_others)
    setValue("othersSummary", formatter(total_others))
    get("total_other_loader").style.display = "none"

    setValue("commissionSummary", formatter(TOTAL_COMMISSION))
    get("total_commission_loader").style.display = "none"


    //total
    setValue("total_transactions",formatNumber(total_transaction))
    setValue("totalSummary",formatter(total_amount))
    get("total_transactions_loader").style.display = "none"


    //agents
    let total_agents = JSON.parse(getMyAgents()).length
    setValue("agentsSummary", total_agents)
    get("total_users_loader").style.display = "none"
}

function  agentsFormatted(){
    let url = getValue("base_url") + "transactions/myAgentsFormatted";
    let response = null;
    $.ajax({
        async: false,
        url: url,
        method: "GET",
        success: function(data) {
            response = data
        }
    });

    return response
}
function probeUrl(url,data){
    let msg={}
    let status=false
    $.ajax({
        url: url,
        data: data,
        async: false,
        method: 'POST',
        success: function(data,textStatus, xhr) {
            msg=data
            status=status
        },error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
        },
    });
    return  {'status':status,'data':msg}
}

function getTrasactionsData(agents, table){
    let data={}
    data.table=table
    data.agents=agents
    let url = getValue("base_url") + "transactions/getTotalTransactions"
    return probeUrl(url,data)
}

function dashboardSummary(category) {
    let total_amount = 0;
    SUB_TOTAL=0;
    let url = getValue("base_url") + "transactions/" + category
    connect(url, "", false, function(outcome) {
        let response = JSON.parse(outcome)
        for (const [key, value] of Object.entries(response)) {
            total_amount += value.amount
            if (!isNaN(value.agent_commission)) {
                TOTAL_COMMISSION += value.agent_commission
            }
        }
    })
    return total_amount
}

function updateValue(id) {
    $('#' + id).attr('value', getValue(id));
}

function updateDropdown(id) {
    let selected = get(id)
    let value = getValue(id)
    for (let i = 0; i < selected.options.length; i++) {
        if (selected.options[i].value == value) {
            selected.selectedIndex = i
            break
        }
    }
}

function transactions(id) {
    setValue("agent_id", id)
    TOTAL_COMMISSION = 0;
    TOTAL_TRANSACTIONS = 0;
    let selected = get("agent_id_for_filter")
    for (let i = 0; i < selected.options.length; i++) {
        if (selected.options[i].value == id) {
            selected.selectedIndex = i
            break
        }
    }

    if (id == "0") {
        clearElements()
        let total_amount = 0;
        //withdraws
        let url = getValue("base_url") + "transactions/getAgents";
        $.ajax({
            async: false,
            url: url,
            method: "GET",
            success: function(data) {
                let response = JSON.parse(data)
                for (const [key, value] of Object.entries(response)) {
                    total_amount += agentTransactions(value.agentid);
                    insertBlankRow()
                }
            }
        });
        addTableFooter(total_amount)
        get("all_transactions_table").style.display = "inline"
        get("loader").style.display = "none";
    } else {
        clearElements()
        table2.clear()
        let total_amount = agentTransactions(id)
        addTableFooter(total_amount)
        get("loader").style.display = "none";
        get("all_transactions_table").style.display = "inline"
    }
}

function getMyAgents() {
    let url = getValue("base_url") + "transactions/getAgents";
    let response = null;
    $.ajax({
        async: false,
        url: url,
        method: "GET",
        success: function(data) {
            response = data
            //console.log(data)
        }
    });

    return response
}

function agentWithdraws(id) {
    let url = getValue("base_url") + "transactions/withdraws/" + id;
    let total_amount = 0;
    $.ajax({
        async: false,
        url: url,
        method: "POST",
        data: {
            id: id,
            start_date: getValue("start_date"),
            end_date: getValue("end_date")
        },
        success: function(data) {
            let response = JSON.parse(data)
            total_amount += trans_summary(response, 'Withdraws', id)
        }
    });

    return total_amount
}

function agentUtilities(id) {
    let url = getValue("base_url") + "transactions/utilities/" + id;
    let total_amount = 0;
    $.ajax({
        async: false,
        url: url,
        method: "POST",
        data: {
            id: id,
            start_date: getValue("start_date"),
            end_date: getValue("end_date")
        },
        success: function(data) {
            let response = JSON.parse(data)
            total_amount += trans_summary(response, 'Utilities', id)
        }
    });

    return total_amount
}

function agentDeposits(id) {
    let url = getValue("base_url") + "transactions/deposits/" + id;
    let total_amount = 0;
    $.ajax({
        async: false,
        url: url,
        method: "POST",
        data: {
            id: id,
            start_date: getValue("start_date"),
            end_date: getValue("end_date")
        },
        success: function(data) {
            let response = JSON.parse(data)
            total_amount += trans_summary(response, 'Deposits', id)
        }
    });

    return total_amount;
}

function others(id) {
    let url = getValue("base_url") + "transactions/others/" + id;
    let total_amount = 0;
    $.ajax({
        async: false,
        url: url,
        method: "POST",
        data: {
            id: id,
            start_date: getValue("start_date"),
            end_date: getValue("end_date")
        },
        success: function(data) {
            let response = JSON.parse(data)
            total_amount += trans_summary(response, 'Other', id)
        }
    });

    return total_amount;
}

function agentTransactions(id) {
    let total_amount = 0;
    //withdraws
    total_amount += agentWithdraws(id)

    //deposits
    total_amount += agentDeposits(id)

    //utilities
    agentUtilities(id)

    //other transactions
    total_amount += others(id)

    return total_amount
}

function emptyTable(table) {
    $("#" + table).find("tr:gt(0)").remove();
}

function clearElements() {
    get("menu-design").style.display = "none"
    get("loader").style.display = "inline";
    get("all_transactions_table").style.display = "none"
        //get agent details
    removeElement("summary")
    showElement("transactions")
    get("all_agents_view").style.display = "none"

    emptyTable("datatable")
}

function trans_summary(data, category, agent) {
    let total = (data.length)
    let amount = null;
    let agent_commission = 0;
    let total_transactions = 0;
    for (const [key, value] of Object.entries(data)) {
        amount += (value.amount);
        if (!isNaN(value.agent_commission)) {
            agent_commission += value.agent_commission
        }
        total_transactions += 1
    }
    TOTAL_COMMISSION += agent_commission
    TOTAL_TRANSACTIONS += total_transactions
    console.log(category + "-" + agent_commission)
    insertNewRow(agent, category, total, amount, agent_commission)
    return amount
}

function formatter(amount) {
    let formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'MKW',

        // These options are needed to round to whole numbers if that's what you want.
        //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
        //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
    });

    return formatter.format(amount);
}

function insertNewRow(agent, category, total, amount, commission) {
    let table = get("datatable");
    table2.row.add([
        agentName(agent).toUpperCase(),
        category.toUpperCase(),
        new Intl.NumberFormat().format(total),
        formatter(amount),
        formatter(commission),
        "<button class='btn btn-primary btn-sm' onclick='details(" + agent + ",\"" + category.toUpperCase() + "\")'><i class='fa fa-eye'></i></button> "
    ]).draw(true);

}

function insertBlankRow() {
    let table = get("datatable");
    let row = table.insertRow(1);
    row.style.backgroundColor = "#9b533f"
    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    let cell4 = row.insertCell(3);
    let cell5 = row.insertCell(4);
    let cell6 = row.insertCell(4);
    cell1.innerHTML = "";
    cell2.innerHTML = "";
    cell3.innerHTML = "";
    cell4.innerHTML = "";
    cell5.innerHTML = "";
    cell6.innerHTML = "";
}

function agentName(id) {
    url = getValue("base_url") + "transactions/getAgentName/" + id;
    let agent = null;
    $.ajax({
        async: false,
        url: url,
        method: "GET",
        data: {
            id: id
        },
        success: function(data) {
            let response = JSON.parse(data)
            agent = (response[0].officelocation)
        }
    });

    return agent;
}

function addTableHeader() {
    let table = get("datatable");
    let header = table.createTHead();
    let row = header.insertRow(0);
    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    let cell4 = row.insertCell(3);
    let cell5 = row.insertCell(4);

    cell1.innerHTML = "<b>Agent</b>";
    cell2.innerHTML = "<b>Transaction</b>";
    cell3.innerHTML = "<b>Total</b>";
    cell4.innerHTML = "<b>Amount</b>";
    cell5.innerHTML = "<b>View</b>";
}

function home() {
    removeElement("content_table");
    showElement("content_page");
}

function clearTable(id) {
    setValue("data_table", "");
}

function withdraws(id) {
    alert(id)
}

function post(id, request_type) {
    let url = getValue("base_url") + request_type + "/" + id;
    $.ajax({
        url: url,
        method: "POST",
        data: {
            id: id
        },
        success: function(data) {
            RESPONSE = data
        }
    });
}

function removeElement(id) {
    get(id).style.display = "none";
}

function showElement(id) {
    get(id).style.display = "inline";
}

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
    location.reload()
}



function addTableFooter(amount) {
    let table = get("datatable");
    let footer = table.createTFoot();
    let row = footer.insertRow(0);
    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    let cell4 = row.insertCell(3);
    let cell5 = row.insertCell(4);
    let cell6 = row.insertCell(5);


    cell1.innerHTML = "<b></b>";
    cell2.innerHTML = "<b>TOTAL</b>";
    cell3.innerHTML = "<b>" + formatNumber(TOTAL_TRANSACTIONS) + "</b>";
    cell4.innerHTML = "<b>" + formatter(amount) + "</b>";
    cell5.innerHTML = "<b>" + formatter(TOTAL_COMMISSION) + "</b>";
}

function formatNumber(number) {
    return new Intl.NumberFormat().format(number)
}

function details(id, type) {
    showModal("transactions_details_modal");
    get("details_loader").style.display = "inline";
    url = null;
    if (type == "DEPOSITS") {
        url = getValue("base_url") + "transactions/deposits/" + id;
    } else if (type == "WITHDRAWS") {
        url = getValue("base_url") + "transactions/withdraws/" + id;
    } else {
        url = getValue("base_url") + "transactions/others/" + id;
    }
    setValue("transaction_type", type)
    let e = document.getElementById("agent_id_for_filter");
    setValue("agent_location", e.options[e.selectedIndex].text)
    $.ajax({
        url: url,
        method: "POST",
        data: {
            id: id,
            start_date: getValue("start_date"),
            end_date: getValue("end_date")
        },
        success: function(data) {
            //setValue("transactions_details_body", data)
            let response = JSON.parse(data)
            let all_data = "";
            let sum = 0;
            let commission = 0;
            for (const [key, value] of Object.entries(response)) {
                let d = new Date(value.txn_date_time)
                var datestring = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " +
                    d.getHours() + ":" + d.getMinutes();


                all_data += "<tr>";
                all_data += "<td>" + datestring + "</td>"
                all_data += "<td>" + formatter(value.amount) + "</td>"
                all_data += "<td>" + formatter(value.agent_commission) + "</td>"
                all_data += "<td></td>"
                all_data += "</tr>";
                sum += value.amount;
                commission += value.agent_commission
            }

            all_data += "<tr>";
            all_data += "<td><b>TOTAL</b></td>"
            all_data += "<td>" + formatter(sum) + "</td>"
            all_data += "<td>" + formatter(commission) + "</td>"
            all_data += "<td></td>"
            all_data += "</tr>";
            setValue("transactions_details_body", all_data)
                //alert(all_data)
            get("details_loader").style.display = "none";
        }
    });


}

function reportInsertRow(report) {
    let table = get("reports_details_table");

    let row = table.insertRow(1);
    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    cell1.innerHTML = report.requestId;
    cell2.innerHTML = report.order.clientName;
    cell3.innerHTML = "Available";
}

function showModal(id) {
    $('#' + id).modal('show');
}

function closeModal(id) {
    $("#transactions_details_modal .close").click()
}