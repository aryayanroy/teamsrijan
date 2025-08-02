$(document).ready(function () {
        const filename = "/assets/json/members.json";
        const $batches = $("#batches");
        const $teams = $("#teams");
        const $members = $("#members");

        function error_print(msg){
            $members.html(`<div class="col-12"><p class="mb-0 alert alert-danger text-center">${msg}</p></div>`);
        }

        $.get(filename, function (data) {
            
            function load_options($element, key) {
                const options = data[key];
                if (!options) return;
                for (let i in options) {
                    const option = new Option(options[i],i);
                    $element.append(option);
                }
            }

            load_options($batches, "batches");
            load_options($teams, "teams");

            function card(member){

                const image = `/assets/images/crews/${member.image}`;

                let teams = `<p class="card-text d-flex flex-wrap">`;
                for(const key of member.team){
                    const team = data.teams[key];
                    teams += `<small class="badge rounded-pill text-bg-danger m-1">${team}</small>`;
                }
                teams += `</p>`;

                let contacts = "";
                for (key in member.contacts){
                    const contact = data.contact_methods[key];
                    contacts += `<a href="${contact.url+member.contacts[key]}" class="nav-item" target="_blank"><i class="${contact.icon} fa-xl"></i></a>`;
                }

                return `<div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <div class="ratio ratio-1x1"><img src="${image}" alt="${member.name}" class="card-img-top"></div>
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">${member.name}</h4>
                            ${teams}
                            <nav class="mt-auto nav nav-justified">${contacts}</nav>
                        </div>
                    </div>
                </div>`
            }

            function load_members() {
                const batch = $batches.val();
                const team = $teams.val();

                $members.empty();
                let member_found = false;
                for (const member of data.members) {
                    if (member.batch == batch && member.team.includes(team)) {
                        $members.append(card(member))
                        member_found = true;
                    }
                }
                if (!member_found) {
                    error_print(`<i class="fa-solid fa-user-xmark me-2"></i><span>No members found.</span>`);
                }
            }

            load_members();

            $batches.add($teams).on("change", function(){
                load_members();
            });

        }).fail(function (jqxhr, textStatus, error) {
            console.error("Failed to load", filename, "=>", textStatus, error);
            error_print("Failed to load members.");
        });
    });