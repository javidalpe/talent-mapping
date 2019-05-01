import ReactDOM from "react-dom";
import React from "react";
import "./app.scss";

const groups = [
	{
		name: "X by Orange",
		items: [
			{name: "Javier Vidal", role: "FD4"},
			{name: "Estela Carbajosa", role: "FD3"},
		]
	},
	{
		name: "Zara",
		items: [
			{name: "Gonzalo Cedillo", role: "FD5"}
		]
	},
	{
		name: "Santander",
		items: [
			{name: "Jesus Jávega", role: "FD4"}
		]
	},
];

const Group = ({group}) => <div>
	<span>{group.name}</span>
	<div style={{display: "flex", flexDirection: "row"}}>
		{group.items.map(item => <Person person={item}/>)}
	</div>
</div>;

const Person = ({person}) => <div>
	<img style={{height: 20, width: 20}} src="https://avatars1.githubusercontent.com/u/5345952?s=460&v=4" alt=""/>
	<strong>{person.name}</strong>
	<p>{person.role}</p>
</div>;

class App extends React.Component {
	constructor(props) {
		super(props);
		this.state = { result: [] };
	};

	componentDidMount() {
		fetch('/query?query=' + encodeURI("select * from employees"))
			.then(data => data.json())
			.then(json => this.setState({result: json}));
	}

	render() {
		return <div style={{display: "flex", flexDirection: "row"}}>
			{this.state.result.map(item => <Group group={item}/>)}
		</div>
	}
}

ReactDOM.render(<App/>, document.getElementById("root"));
