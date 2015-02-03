
function getReviewForm()
{
	if (document.forms)
		return (document.forms['review_form']);
	else
		return (document.review_form);
}

function acceptReview(id)
{
	var form = getReviewForm();
	form.elements['id_agile_review'].value = id;
	form.elements['action'].value = 'accept';
	form.submit();
}

function deleteReview(id)
{
	var form = getReviewForm();
	form.elements['id_agile_review'].value = id;
	form.elements['action'].value = 'delete';
	form.submit();
}

function getCriterionForm()
{
	if (document.forms)
		return (document.forms['criterion_form']);
	else
		return (document.criterion_form);
}

function editCriterion(id)
{
	var form = getCriterionForm();
	form.elements['id_agile_criterion'].value = id;
	form.elements['criterion_name'].value = document.getElementById('criterion_name_' + id).value;
	form.elements['criterion_action'].value = 'edit';
	form.submit();
}

function deleteCriterion(id,msg)
{
    var form = getCriterionForm();
    if (!confirm(msg)) return;
	form.elements['id_agile_criterion'].value = id;
	form.elements['criterion_action'].value = 'delete';
	form.submit();
}

